package dominio;

public class Caminhao extends Veiculo {
    
    private int _eixos;

    public Caminhao(String placa, int ano, int eixos){
        super(placa, ano);
        this._eixos = eixos;
    }

    public int getEixos(){
        return _eixos;
    }

    @Override
    public void exibirDados(){
        System.out.print("Placa: " + placa + ", Ano: " + ano + "Eixos: " + _eixos);
    }
}
