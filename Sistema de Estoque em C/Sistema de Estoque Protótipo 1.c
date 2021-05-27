#include <stdio.h>
#include <stdlib.h>
#include <string.h>


typedef struct
{
    int codigo;
    char nome[30];
    float preco;
    int quantidade;
} estoque;


int main ()
{
	//Variaveis

int i, codUs, cont, qtdeUs, a;
float valorT;
estoque produto[5];

//Cadastros dos produtos
strcpy (produto[0].nome, "iphone x");
strcpy (produto[1].nome, "fone de ouvido wireless");
strcpy (produto[2].nome, "samsung s10");
strcpy (produto[3].nome, "iphone 8 plus 128gb");
strcpy (produto[4].nome, "xiaomi");


//Cadastro de codigos
produto[0].codigo = 1;
produto[1].codigo = 2;
produto[2].codigo = 3;
produto[3].codigo = 4;
produto[4].codigo = 5;

//Cadastro de Pre�os
produto[0].preco = 7000.00;
produto[1].preco = 350.00;
produto[2].preco = 5000.00;
produto[3].preco =  3500.00;
produto[4].preco = 800.00;

//Cadastro de Estoque
produto[0].quantidade = 5;
produto[1].quantidade = 4;
produto[2].quantidade = 10;
produto[3].quantidade =13;
produto[4].quantidade = 20;

//La�o para iniciar a compra


	printf("         PRODUTOS DISPONiVEIS:     ");

	printf("\n   Cod: 1 - Iphone X 256gb");
	printf("\n   Cod: 2 - Fone de Ouvido sem fio ");
	printf("\n   Cod: 3 - Samsung S10");
	printf("\n   Cod: 4 - Iphone 8 plus 128gb");
	printf("\n   Cod: 5 - Xioami mi 8 64gb");
	printf("\n   Cod: 0 - Encerrar o pedido     ");

	do
	{

  printf("Digite o codigo do produto desejado:  ");
                scanf ("%d", &codUs);
if (codUs>5)
    {
      printf("PRODUTO NAO ENCONTRADO");
     }
     if (codUs==0)
     {
         return 0;
     }

for ( i = 0; i < 5; i++){ //Caso tenha no estoque, la�o de repeti��o para avisar que tem.
 if ( produto[i].codigo == codUs )
 {
 	printf("\\\\\\\\\\\\\\\Produto ENCONTRADO\\\\\\\\\\\\");
 	a = i;
 	break;

 }
 }


//Solicia a quantidade que quer comprar
  printf("\nQual a quantidade desejada:  ");
  scanf("%d", &qtdeUs);

  printf("\n O produto tem %d quantidade no estoque", produto[i].quantidade); //Visualiza a quantidade atual do estoque


 if ( produto[a].quantidade >= qtdeUs )//Condi��o para verificar se a quantidade tem no estoque
 {
 	//calculos para  estoque e valor
 	produto[a].quantidade =produto[a].quantidade - qtdeUs;
 	valorT = produto[a].preco * (qtdeUs);

 	//se tiver, o calculo � feito e imprimido para o usuario.
 	printf("\n\nE o valor do seu produto eh de: R$ %.2f", produto[a].preco);
 	printf("\n Seu pedido tem o valor de: R$ %.2f", valorT);
 	printf("\n\nAgora no o produto tem %d quantidade no estoque\n", produto[a].quantidade); // Estoque ap�s a compra

 }  else
    {
      printf("*O PRODUTO ESTA ESGOTADO**");
     }

}
while(codUs != 0);

                return 0;
}
