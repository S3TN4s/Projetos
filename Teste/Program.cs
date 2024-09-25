using System;

class Program
{
    static void Main(string[] args)
    {
        // Recolher dados do usuário
        Console.Write("Digite seu nome: ");
        string nome = Console.ReadLine();

        Console.Write("Digite sua idade: ");
        int idade = int.Parse(Console.ReadLine());

        Console.Write("Digite seu email: ");
        string email = Console.ReadLine();

        // Exibir os dados coletados
        Console.WriteLine("\n--- Dados do Usuário ---");
        Console.WriteLine($"Nome: {nome}");
        Console.WriteLine($"Idade: {idade}");
        Console.WriteLine($"Email: {email}");
        
        // Manter a janela aberta até o usuário pressionar uma tecla
        Console.WriteLine("\nPressione qualquer tecla para sair...");
        Console.ReadKey();
    }
}