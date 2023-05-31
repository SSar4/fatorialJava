import java.util.Scanner;

public class FatorialCalculator {
  private int fatorial;

  public int getFatorial() {
    return fatorial;
  }

  public void setFatorial(int numero) {
    if (numero < 0) {
      throw new IllegalArgumentException("O número não pode ser negativo.");
    }

    int resultado = 1;
    for (int i = 2; i <= numero; i++) {
      resultado *= i;
    }


    fatorial = resultado;
  }

  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    System.out.print("Digite um número inteiro positivo: ");
    int numero = scanner.nextInt();
    scanner.close();
    FatorialCalculator fatorialCalc = new FatorialCalculator();

    fatorialCalc.setFatorial(numero);
    int resultadoFatorial = fatorialCalc.getFatorial();

    System.out.println("O fatorial de " + numero + " é: " + resultadoFatorial);
  }
}
