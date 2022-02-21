package dominio;

public class Veiculo {

    protected String placa;
    protected int ano;

    public Veiculo() {};

    public Veiculo(String placa, int ano){
        this.placa = placa;
        this.ano = ano;
    }

    public void setPlaca(String placa){
        this.placa = placa;
    }

    public void setAno(int ano){
        this.ano = ano;
    }

    public void setAno(String ano){
        this.ano = 1900;
        if(ano.matches("[+-]?\\d*(\\.\\d+)?")){
            this.ano = Integer.parseInt(ano);    
        }
    }

    public String getPlaca(){
        return placa;
    }    

    public int getAno(){
        return ano;
    }

    public void exibirDados(){
        System.out.print("Placa: " + placa + ", Ano: " + ano);
    }
}
