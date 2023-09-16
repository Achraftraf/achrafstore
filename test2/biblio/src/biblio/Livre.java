package biblio;

public class Livre {
	protected int code;
	protected String titre;
	protected String auteur;

	public int getCode() {
		return code;
	}

	public void setCode(int code) {
		this.code = code;
	}

	public String getTitre() {
		return titre;
	}

	public void setTitre(String titre) {
		this.titre = titre;
	}

	public String getAuteur() {
		return auteur;
	}

	public void setAuteur(String auteur) {
		this.auteur = auteur;
	}

	public Livre() {
		super();
	}

	public Livre(int code, String titre, String auteur) {
		this.code = code;
		this.titre = titre;
		this.auteur = auteur;
	}

	public void afficher() {
		System.out.println(code + titre + auteur);

	}


}
