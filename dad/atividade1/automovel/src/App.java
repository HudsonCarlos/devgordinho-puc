
import java.util.ArrayList;

import dominio.Caminhao;
import dominio.Onibus;
import dominio.Veiculo;

public class App {
    public static void main(String[] args) throws Exception {

        var veiculos = new ArrayList<Veiculo>();
        var caminhoes = new ArrayList<Caminhao>();
        var onibus = new ArrayList<Onibus>();

        veiculos.add(new Veiculo("XXX1234", 2000));
        veiculos.add(new Veiculo("XXX1235", 2001));
        veiculos.add(new Caminhao("XXX1236", 2002, 4));
        veiculos.add(new Caminhao("XXX1237", 2003, 8));
        veiculos.add(new Onibus("XXX1238", 2004, 10));
        veiculos.add(new Onibus("XXX1239", 2005, 12));

        caminhoes.add(new Caminhao("XXX1240", 2006, 12));
        caminhoes.add(new Caminhao("XXX1241", 2007, 8));

        onibus.add(new Onibus("XXX1242", 2008, 14));
        onibus.add(new Onibus("XXX1243", 2009, 16));

        System.out.println("xxxxxxxxxxxxxxxxxxxxxxxxxx");
        System.out.println("");
        for (var veiculo : veiculos) {
            veiculo.exibirDados();
        }
        
        System.out.println("xxxxxxxxxxxxxxxxxxxxxxxxxx");
        System.out.println("");
        for (var caminhao : caminhoes) {
            caminhao.exibirDados();
        }
        
        System.out.println("xxxxxxxxxxxxxxxxxxxxxxxxxx");
        System.out.println("");
        for (var onibu : onibus) {
            onibu.exibirDados();
        }

        System.out.println("Hello, World!");
    }
}
