<?php
namespace App\Controller;

use App\Entity\Produto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{

    /**
     * @Route("hello-world")
     */
    public function world()
    {
        return new Response(
            "<html><body><h2>Hello World!</h2></body></html>"
        );
    }

    /**
     * @Route("mostrar-mensagem")
     */
    public function mensagem()
    {
        return $this->render("hello/mensagem.html.twig", [
            'mensagem' => 'Olá Alfredo!'
        ]);
    }


    /**
     * @Route("cadastrar-produto")
     */
    public function produto()
    {
        $em = $this->getDoctrine()->getManager();

        $produto = new Produto();
        $produto->setNome('PS4 Pro')
            ->setPreco('2500');

        $em->persist($produto);
        $em->flush();

        return new Response("O Produto " . $produto->getid() . " foi criado ");
    }
}