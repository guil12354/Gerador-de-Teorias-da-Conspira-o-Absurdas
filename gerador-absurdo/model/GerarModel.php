<?php

class GerarModel
{
    private $alvos = [
        "os pombos da cidade",
        "as máquinas de refrigerante",
        "os gatos de rua",
        "os professores de matemática",
        "os relógios digitais",
        "as tomadas das escolas"
    ];

    private $motivos = [
        "estão secretamente controlando o comportamento das pessoas",
        "foram criados para espionar a população",
        "fazem parte de um plano secreto para dominar o mundo",
        "estão manipulando as informações que recebemos",
        "foram programados para alterar a realidade",
        "estão preparando uma grande operação secreta"
    ];

    private $consequencias = [
        "e em breve ninguém poderá confiar nos próprios relógios",
        "e tudo começará em uma terça-feira às 3h17 da manhã",
        "e o primeiro sinal será o desaparecimento de todas as canetas azuis",
        "e somente quem estiver usando meias diferentes conseguirá perceber",
        "e os computadores da escola revelarão toda a verdade",
        "e a população terá apenas 24 horas para descobrir o segredo"
    ];

    public function gerarFrase($assunto)
    {
        $alvo = $this->alvos[array_rand($this->alvos)];
        $motivo = $this->motivos[array_rand($this->motivos)];
        $consequencia = $this->consequencias[array_rand($this->consequencias)];

        return "A teoria afirma que $alvo, relacionados ao assunto \"$assunto\", $motivo, $consequencia.";
    }
}