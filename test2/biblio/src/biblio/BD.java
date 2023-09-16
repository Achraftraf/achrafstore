package biblio;

public class BD extends Livre {
	private String dessinateur;

	public BD() {
		super();
	}

	public BD(int code, String titre, String auteur, String dessinateur) {
		this.dessinateur = dessinateur;
	}

	public void afficher() {
		System.out.println("dessinateur" + dessinateur);
	}
}