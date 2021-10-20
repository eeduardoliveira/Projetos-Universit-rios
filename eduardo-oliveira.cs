// QUESTÃO 1

using System;

public class Node
{
    public int Value { get; set; }

    public Node Left { get; set; }

    public Node Right { get; set; }

    public Node(int value, Node left, Node right)
    {
        Value = value;
        Left = left;
        Right = right;
    }
}


public class BinarySearchTree_2
{
    public static bool ValidBST(Node root)
    {
        if (root.Left == null && root.Right == null)
            return true;

        else if (root.Left == null)
        {
            // Checando root.Right.Value
            if (root.Value <= root.Right.Value)
                return true;

            else
                return false;
        }
        else if (root.Right == null)
        {
            // Checando root.Left.Value
            if (root.Value > root.Left.Value)
                return true;
            else
                return false;
        }
        else
        {
            // Checando valores
            if (root.Value > root.Left.Value && root.Value <= root.Right.Value)
                return true;
            else
                return false;
        }
    }


    public static void Main(string[] args)
    {
        Node n1 = new Node(1, null, null);
        Node n3 = new Node(3, null, null);
        Node n2 = new Node(2, n1, n3);

        // Execute a função e valide o valor.
        Console.WriteLine(ValidBST(n3));
        Console.ReadLine();
    }
}


// QUESTÃO 2

//B


MemoryCache memoryCache = new MemoryCache();
Cache cache = (Cache) memoryCache;
DiskCache diskCache = (DiskCache) cache;

// C

DiskCache diskCache = new DiskCache();
OptimizedDiskCache optimizedDiskCache = (OptimizedDiskCache) diskCache;

// Questão 3

using System;
using System.Collections.Generic;
using System.Linq;

public static class MergeNames
{
    public static string[] UniqueNames(this string[] names1, string[] names2)
    {
        Dictionary<string, int> keyvale = new Dictionary<string, int>();
        string[] val = null;
        int i = 0;
        for (i = 0; i < names1.Length; i++)
        {
            keyvale.Add(names1[i], i);
        }
        for (int j = 0; j < names2.Length; j++)
        {
            if (keyvale.ContainsKey(names2[j]))
            {

            }
            else
            {
                keyvale.Add(names2[j], i);
            }
        }
        val = keyvale.Select(z => z.Key).ToArray();
        return val;
    }

    public static void Main(string[] args)
    {
        string[] names1 = new string[] { "Ava", "Emma", "Olivia" };
        string[] names2 = new string[] { "Olivia", "Sophia", "Emma" };
        Console.WriteLine(string.Join(", ", UniqueNames(names1, names2))); // Deve imprimir Ava, Emma, Olivia, Sophia
    }
}

//Questão 4
using System;  
using System.Numerics;  
  
class Test  
{  
    static void Main()  
    {  
        // as an example let's solve x^2 + 4 = 0  
        Tuple<Complex, Complex> roots = SolveQuadratic(1, 0, 4);  
        Console.WriteLine("The roots are {0} and {1}", ShowComplex(roots.Item1), ShowComplex(roots.Item2));  
  
        // and also x^2 - 2x + 2  
        roots = SolveQuadratic(1, -2, 2);  
        Console.WriteLine("The roots are {0} and {1}", ShowComplex(roots.Item1), ShowComplex(roots.Item2));  
        Console.ReadKey();  
    }  
  
    static Tuple<Complex, Complex> SolveQuadratic(double a, double b, double c)  
    {  
        if (a == 0) throw new ArgumentException("The coefficient of x squared can't be zero");  
        double discriminant = b * b - 4.0 * a * c;  
        Complex temp;  
        if (discriminant >= 0)  
        {  
            temp = new Complex(Math.Sqrt(discriminant), 0);  
        }  
        else  
        {  
            temp = new Complex(0, Math.Sqrt(-discriminant));  
        }  
        Complex root1 = (-b + temp) / (2.0 * a);  
        Complex root2 = (-b - temp) / (2.0 * a);  
        return Tuple.Create(root1, root2);  
    }  
  
    static string ShowComplex(Complex c)  
    {  
        if (c == Complex.Zero) return "0";  
        if (c.Imaginary == 0.0) return c.Real.ToString();  
        string imag;  
        if (c.Imaginary == 1)  
            imag = "i";  
        else if (c.Imaginary == -1)  
            imag = "-i";  
        else  
            imag = c.Imaginary.ToString() + "i";  
        if (c.Real == 0.0) return imag;  
        string sep = (c.Imaginary > 0.0) ? "+" : "";  
        return c.Real.ToString() + sep + imag;  
    }  
} 

//Questão 5
using System;

public class InsertText {
    
    private static string str=null;
    public virtual void Add(char c)
    {
        
    }
    
    public static string GetValue()
    {
        
    }
}

public class NumericInput:TextInsert
{

 public override void Add(char c)
 {
 if()
 }

}

public class UserInsert
{
    public static void Main(string[] args)
    {
        TextInsert input = new NumericInput();
        input.Add('1');
        input.Add('a');
        input.Add('0');
        Console.WriteLine(input.GetValue());
    }
}
tatic void Main(string[] args)
        {
            TextInput input= new NumericInput();


            input.Add('1');
            input.Add('a');
            input.Add('0');
            Console.WriteLine(TextInput.GetValue());
            Console.ReadKey();
           
        }



    
    public class TextInsert
    {

        protected static string str = null;
        public virtual void Add(char c)
        {
            str += c;
        }

        public static string GetValue()
        {
            return str;
        }
    }

    public class NumericInput : TextInsert
    {

        public override void Add(char c)
        {

            if (!(c >= 48 && c <= 57))
            {
               
            }
            else
            {
                str += c;
            }
           
            
            }

    }
