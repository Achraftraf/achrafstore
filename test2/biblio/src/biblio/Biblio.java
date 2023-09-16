package biblio;

import java.awt.im.InputContext;
import java.io.BufferedInputStream;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

public class Biblio {

	public static void main(String[] args) {
		Livre[] ouvrage = new Livre[5];
		int code = 0;
		String titre = "ach", auteur = "ok";
		ouvrage[0] = new Livre(123, "java", "sun");
		ouvrage[1] = new Livre(123, "java", "yes");
		ouvrage[2] = new Livre(123, "java", "ok");
		ouvrage[3] = new BD(123, "java", "ok", "ae");
		try {
			InputStreamReader isr = new InputStreamReader(System.in);
			BufferedReader br = new BufferedReader(isr);
			System.out.println("code :");
			code = Integer.parseInt(br.readLine());
			System.out.println("titre :");
			titre = br.readLine();
			System.out.println("auteur :");
			auteur = br.readLine();
			ouvrage[4] = new Livre(code, titre, auteur);
			System.out.println("test");
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		try {
			for (int i = 0; i < 5; i++) {
				ouvrage[i].afficher();
			}

		} catch (NullPointerException e) {
			System.out.println("attention!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ne pas enter le meme nombre");
			System.out.println(e);
		}

	}

}
