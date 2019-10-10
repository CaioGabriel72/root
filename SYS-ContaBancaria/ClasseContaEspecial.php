<?php 
    include('ClasseContaCorrente.php');

    class ContaEspecial extends ContaCorrente{

            protected $limite;

            function __construct($vetor)
            {
                parent::__construct($vetor);
                $this->limite = $vetor['limite'];
            
            }

              
    
        public function sacar($valor){
            if($valor > $this->limite){
                echo"Valor superior ao limite disponível";
            }else{
            $this->saldo 
            = $this->saldo - $valor;
            }
        }

        
        public function exibe_dados()
    {
            parent::exibe_dados();
            echo"
                <div>	
                    <label>Limite:</label> ".$this->limite."
                </div>	                
                </fieldset>";
    }



    } 
?>