#include <stdio.h>

/*Faça um programa para armazenar as notas de uma quantidade x de alunos*/

int main(void){

	int alunos;

	printf("Digite a quantidade de alunos:\n");
	scanf("%d", &alunos);
	
	float notas [(alunos)-1];
	
	for (int i = 0; i <= (alunos - 1); i++){
		printf("Digite a nota do aluno %d", alunos + 1);
		scanf("%f", &notas[i]);
	}
	
	return 0;
}
