public class Aluno {
    // Atributos da classe Aluno
    public String nome;
    public int idade;

    // Construtor da classe Aluno
    public Aluno(String nome, int idade) {
        this.nome = nome;
        this.idade = idade;
    }

    // Métodos para acessar os atributos
    public String getNome() {
        return nome;
    }

    public int getIdade() {
        return idade;
    }
}