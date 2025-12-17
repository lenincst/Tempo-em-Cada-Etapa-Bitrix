<?php
require_once (dirname(__DIR__).'/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv ->load();

# Aqui estou criando uma VARIAVEL(dotenv) onde receberá um OBJETO(), esse objeto ele não tem nome, ele apenas contem algo, ele é um endereço hexadecimal onde eu coloco em uma variavel para colocar uma "coleira" nesse objeto dentro da memória, como faço para criar esse objeto: Vou chamar uma classe da biblioteca onde logo depois tem o OPERADOR DE RESOLUÇÃO que irá definir o MÉTODO CreateImmutable, quando uso o Operador de resolução (::) já podemos definir que é um método estático, esse método estático será necessário para fazer a instanciação desse objeto, simplificando o processo e não precisando criar o "new dotenv()", logo depois eu coloco dentro do método o local onde está o .env, o certo é o env estar na raiz, por conta disso eu colocar apenas uma constante mágina __DIR__ que pega a pasta do arquivo atual, caso estivesse em uma pasta, era so eu concatenar "(__DIR__ . '/server');". O env é escondido pelo navegador e por isso a segurança dele ser o portador das credenciais. Quando eu carrego esse arquivo com a parte $dotenv ->load(); eu tenho minha variavel que terei que usar um MÉTODO DE CHAMADO que é o "->" esse metodo ira chamar o objeto para ter a ação com o metodo load, pois o medoto load precisa saber o caminho e o caminho está na variavel, então executamos o metodo load com o conteudo (objeto) que está na variavel.

?>