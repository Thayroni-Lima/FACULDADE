public class Main {
    public static void main(String[] args) {
        // Criando uma nova instância da classe Aluno
        Aluno aluno1 = new Aluno("João", 20);

        // Obtendo e imprimindo os atributos da instância
        System.out.println("Nome: " + aluno1.getNome());
        System.out.println("Idade: " + aluno1.getIdade());
    }
}