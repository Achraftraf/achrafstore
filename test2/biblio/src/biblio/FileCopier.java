package biblio;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.io.PrintWriter;

public class FileCopier {


	public static void main(String[] args) {
		try {
			BufferedReader original = new BufferedReader(new FileReader("original.txt"));
			PrintWriter copie = new PrintWriter("copie.txt");
			String line;
			int number = 0;
				try {
					while((line = original.readLine())!=null)
					{
						number++;
						copie.println(++number + "-" +line);
					}
				} catch (IOException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				try {
					original.close();
				} catch (IOException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
				copie.close();
			} catch (FileNotFoundException e) {
				e.printStackTrace();
		}

	}

}
