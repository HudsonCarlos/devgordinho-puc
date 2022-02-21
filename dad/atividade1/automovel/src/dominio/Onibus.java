package dominio;

public class Onibus extends Veiculo {
    
    private int _assentos;

    public Onibus(String placa, int ano, int assentos){
        super(placa, ano);
        this._assentos = assentos;
    }

    public int getAssentos(){
        return _assentos;
    }

    public void setAssentos(int assentos){
        this._assentos = assentos;
    }

    @Override
    public void exibirDados(){
        System.out.print("Placa: " + placa + ", Ano: " + ano + "Assento: " + _assentos);
    }
}
