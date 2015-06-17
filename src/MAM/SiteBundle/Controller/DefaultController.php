<?php
//http://localhost/MAMRH/web/app_dev.php/#team-scroller
// pour modifier un attribut il suffit  de modifier dans l'entité directement et aprés taper ces commandes:
//ouvrire la console  dans MAMRAH: php app/console doctrine:generate:entities MAMRHBundle
//aprés php app/console doctrine:schema:update --dump-sql
       //php app/console doctrine:schema:update --force

namespace MAM\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MAM\RHBundle\Entity\Testoffre;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use MAM\RHBundle\Entity\Candidat;
use MAM\RHBundle\Entity\CV;
use MAM\RHBundle\Form\CVType;
use MAM\RHBundle\Entity\Enquiry;
use MAM\RHBundle\Form\EnquiryType;

class DefaultController extends Controller
{
    public function indexAction()
    {

     //formulaire
        $em = $this->getDoctrine()->getManager();
        //$em: c'est la variable qui nous permet de faire la liasion avec la base de données, soit persist and flush,getRepository...


        $offre = $em->getRepository('MAMRHBundle:Offre')->findAll();

     $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Test')
                    ->setFrom($enquiry->getEmail())
                    ->setTo('mamrh100@gmail.com')
                    ->setBody($enquiry->getBody());
                $this->get('mailer')->send($message);
                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->render('MAMSiteBundle:Default:index.html.twig',array('offre' => $offre,'form' => $form->createView()));
            }
        }
        
    //
      

else
   {

    	// Pour récupérer un article unique : on utilise find()
return $this->render('MAMSiteBundle:Default:index.html.twig',array('offre' => $offre,'form' => $form->createView()));
}
    }

/**
 * @Route("/CV", name="CV")
 * @Template()
 */
public function CVAction()
{
  $em = $this->getDoctrine()->getManager();
   $CV=new CV();
     // On crée le FormBuilder grâce à la méthode du contrôleur (createFormBuilder)
$form = $this->createForm(new CVType(),$CV);
$request = $this->get('request');
if ($request->getMethod() == 'POST') {
// On fait le lien Requête <-> Formulaire


$form->bind($request);// À partir de maintenant, la variable $candidat contient les valeurs entrées dans le formulaire par le visiteur


if ($form->isValid()) {// On vérifie que les valeurs entrées sont correctes
// (Nous verrons la validation des objets en détail dans le prochain chapitre)

// On l'enregistre notre objet $candidat dans la base de données
// $this->getDoctrine()->getManager(); pour faire la communication avec la base de donneés 
 // 1
  //$em->persist($candidat);  $em->flush(); pour poster 
//2
  //$em->getRepository('MAMRHBundle:Testoffre'); pour get
//pour bien comprendre ce fonctionnement voir la page 124 de cours symfony2
var_dump($CV);
$em->persist($CV);//c'est à dire mémoriser ce traitement dans la mémoire, car on peut faire plusieurs persist et une seule flush



$em->flush();//on exécute tt les traitements

// On redirige vers la page de visualisation de l'article nouvellement créé
return $this->redirect($this->generateUrl('mam_site'));}
}

else
   {


//$em = $this->getDoctrine()->getManager();
// Pour récupérer l'offre dont l'utilisateur a envie de postuler : on utilise find() pour unique offre

//$offre = $em->getRepository('MAMRHBundle:Testoffre')->find($id);

 return $this->render('MAMSiteBundle:Default:index3.html.twig',array('form' => $form->createView()));
 //j'envois l'offre pour l'afficher c'est juste pr s'assurer et aussi form (formulaire à créer)
    
   }

  }



   
/**
 * @Route("/lire_plus", name="_lire_plus")
 * @Template()
 */
public function helloAction($id)//c'est l'id de l'offre dont je clique pour lire plus
{//readme: cette action jeu 2 role, c'est la requette est de type get, elle afficher juste le formulaire, si nn persist les données 
          // dans la base de données


	 $candidat=new Candidat();
     // On crée le FormBuilder grâce à la méthode du contrôleur (createFormBuilder)
$form = $this->createFormBuilder($candidat)
->add('CIN', 'text')
->add('Nom', 'text')
->add('Prenom', 'text')
->add('Email', 'text')
->add('Specialite', 'text')
->add('Diplome', 'text')
->add('Tel', 'text')
->add('cv',new CVType())
->getForm();

$em = $this->getDoctrine()->getManager();
$offre = $em->getRepository('MAMRHBundle:Offre')->find($id);

// On récupère la requête
$request = $this->get('request');


//1éré cas:
// On vérifie qu'elle est de type POST
if ($request->getMethod() == 'POST') {
// On fait le lien Requête <-> Formulaire


$form->bind($request);// À partir de maintenant, la variable $candidat contient les valeurs entrées dans le formulaire par le visiteur


if ($form->isValid()) {// On vérifie que les valeurs entrées sont correctes
// (Nous verrons la validation des objets en détail dans le prochain chapitre)

// On l'enregistre notre objet $candidat dans la base de données
// $this->getDoctrine()->getManager(); pour faire la communication avec la base de donneés 
 // 1
	//$em->persist($candidat);  $em->flush(); pour poster 
//2
	//$em->getRepository('MAMRHBundle:Testoffre'); pour get
//pour bien comprendre ce fonctionnement voir la page 124 de cours symfony2

$em->persist($candidat);//c'est à dire mémoriser ce traitement dans la mémoire, car on peut faire plusieurs persist et une seule flush

$offre->addcandidat($candidat);//c'est l'injection, i.e: enregistrer dans la table de jointure les id de l'offre et candidat
                                   //addTestcandidat: c'est la méthode qui ce travail, celle-ci est définie dans l'entité proprietaire
                                   //dans ce cas c'est Testoffre

$em->flush();//on exécute tt les traitements

// On redirige vers la page de visualisation de l'article nouvellement créé
return $this->redirect($this->generateUrl('mam_site'));}
}



// 2émé cas :
// - Soit la requête est de type GET, donc le visiteur vientd'arriver sur la page et veut voir le formulaire
// - Soit la requête est de type POST, mais le formulaire n'estpas valide, donc on l'affiche de nouveau

//cette else pour traiter le 2 émé cas, i.e lorsque l'utilisateur vient de la premiere fois à la page où le formulaire se trouve
else
   {


//$em = $this->getDoctrine()->getManager();
// Pour récupérer l'offre dont l'utilisateur a envie de postuler : on utilise find() pour unique offre

//$offre = $em->getRepository('MAMRHBundle:Testoffre')->find($id);

 return $this->render('MAMSiteBundle:Default:index2.html.twig',array('offre' => $offre,'form' => $form->createView()));
 //j'envois l'offre pour l'afficher c'est juste pr s'assurer et aussi form (formulaire à créer)
    
   }

  }



}
