<?php
 
    class ContaCorrente{

        protected $cpf;
        protected $nome;
        protected $email;
        protected $nroConta;
        protected $saldo ;

        function __construct($vetor){
            $this->cpf= $vetor['cpf'];
            $this->nome= $vetor['nome'];
            $this->email = $vetor['email'];
            $this->nroConta= @date("YmdHis");
            $this->saldo = 0;
        }
        public function get_cpf(){
            return($this->cpf);
        }
        public function get_nome(){
            return ($this->nome);
        }
        public function set_email($e)
        {
            $this->email = $e;
        }
         public function get_email()
        {
            return($this->email);
        }
      
        public function get_nroconta()
        {
            return($this->nroConta);
        }
        
        public function depositar($valor){
            $this->saldo
            = $this->saldo + $valor;
        }

        public function get_saldo(){
            return ($this->saldo);   
        }
        
        public function sacar($valor){
            if($valor > $this->saldo){
                echo"Valor superior ao saldo disponível";
            }else{
            $this->saldo 
            = $this->saldo - $valor;
            }
        }
        public function exibe_dados(){
            echo"<fieldset>
                    <div>
                        <label>CPF:</label>".$this->cpf."  
                    </div>          

                    <div>
                        <label>Nome:</label>".$this->nome."  
                    </div>  

                    <div>
                        <label>Email:</label>".$this->email."  
                    </div>  

                        <label>Numero da Conta:</label>".$this->nroConta."  
                    </div>  
                    <div>
                        <label>Saldo:</label>".$this->saldo."  
                    </div>  
                    <a href='operar_conta.php?nroConta=".$this->nroConta."'/>.Realizar  Operações
                ";
    }
                public function exibeTR(){
                    
                    echo "
                    <tr>
                        <td>"."<a href='operar_conta.php?nroConta=".$this->nroConta."'/>".$this->nome."</td>
                        <td>".$this->nroConta."</td>
                        <td>".$this->saldo."</td>
                    ";
                }
    }


?>