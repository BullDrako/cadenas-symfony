<?php
/**
 * Created by PhpStorm.
 * User: edgar
 * Date: 18/11/15
 * Time: 20:02
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Services\CadenaService;

class CadenaController extends Controller
{
    /**
     * @Route(
     *          path="/cadena/juntar",
     *          name="app_default_juntar")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function juntarAction()
    {
        $conexion = "app_default_dojuntar";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }


    /**
     *@Route(
     *      path = "/cadena/dojuntar/",
     *      name = "app_default_dojuntar")
     *
     */


    public function doJuntarAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');


        $j = $this->container->get('cadena');
        $j->setCadena1($cadena1);
        $j->setCadena2($cadena2);

        $j->juntar();

        $result = $j->getResult();


        return $this->render(':default:result.html.twig', array(  //render devolver una vista
                'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *      path = "/cadena/reves/",
     *      name = "app_default_reves"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function revesAction()
    {
        $conexion = "app_default_doreves";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     * @Route(
     *      path = "/cadena/doreves/",
     *      name = "app_default_doreves"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doRevesAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $r = $this->container->get('cadena');
        $r->setCadena1($cadena1);
        $r->setCadena2($cadena2);

        $r->reves();

        $result = $r->getResult();


        return $this->render(':default:result.html.twig', array(  //render devolver una vista
                'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *      path = "/cadena/contar/",
     *      name = "app_default_contar"
     * )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contarAction()
    {
        $conexion = "app_default_docontar";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     * @Route(
     *      path = "/cadena/dorcontar/",
     *      name = "app_default_docontar"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doContarAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $c = $this->container->get('cadena');
        $c->setCadena1($cadena1);
        $c->setCadena2($cadena2);

        $c->contar();

        $result = $c->getResult();


        return $this->render(':default:result.html.twig', array(  //render devolver una vista
                'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *          path = "/cadena/mayusculas/",
     *          name = "app_default_mayusculas")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mayusculas()
    {
        $conexion = "app_default_domayusculas";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }

    /**
     * @Route(
     *      path = "/cadena/domayusculas/",
     *      name = "app_default_domayusculas"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doMayusculasAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $m = $this->container->get('cadena');
        $m->setCadena1($cadena1);
        $m->setCadena2($cadena2);

        $m->mayusculas();

        $result = $m->getResult();


        return $this->render(':default:result.html.twig', array(  //render devolver una vista
                'result' => $result,
            )
        );
    }

    /**
     * @Route(
     *          path = "/cadena/contarvocales/",
     *          name = "app_default_contarvoclaes")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contarvoclaesAction()
    {
        $conexion = "app_default_domayusculas";
        return $this->render(':default:formulario.html.twig', array('conexion'=>$conexion));
    }


    public function doContarvocalesAction(Request $request)
    {
        $cadena1 = $request->request->get('cadena1');
        $cadena2 = $request->request->get('cadena2');



        $m = $this->container->get('cadena');
        $m->setCadena1($cadena1);
        $m->setCadena2($cadena2);

        $m->contarvocales();

        $result = $m->getResult();


        return $this->render(':default:result.html.twig', array(  //render devolver una vista
                'result' => $result,
            )
        );
    }
}