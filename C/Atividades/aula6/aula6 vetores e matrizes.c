#include <stdio.h>
#include <locale.h>

/*Faça um programa para armazenar as notas de uma quantidade x de alunos*/

int main(void){
	setlocale(LC_ALL, "Portuguese_Brazil");

	int alunos, i;
	float media = 0;

	printf("Digite a quantidade de alunos:\n");
	scanf("%d", &alunos);
	
	float notas[(alunos)-1];
	
	for (i = 0; i <= ((alunos)-1); i++){
		printf("Digite a nota do aluno %d\n", i + 1);
		scanf("%f", &notas[i]);
	}
	
	for (i = 0; i <= ((alunos)-1); i++){
		printf("Aluno %d: %.2f\n", i + 1, notas[i]);	
	}
	
	for (i = 0; i <= ((alunos)-1); i++){
		media = media + notas[i];	
	}
	
	media = media / alunos;
	printf("A média das notas é %.2f\n", media);
	
	return 0;
}
