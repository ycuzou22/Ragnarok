using UnityEngine;

public class Deplacement : MonoBehaviour
{
    public float vitesseDeDeplacement = 5f;

    private Rigidbody2D rb2D;

    void Start()
    {
        // Assurez-vous que l'objet a un composant Rigidbody2D attaché
        rb2D = GetComponent<Rigidbody2D>();
        if (rb2D == null)
        {
            Debug.LogError("Le script nécessite un composant Rigidbody2D attaché à l'objet.");
        }
    }

    void Update()
    {
        // Déplacement vers la gauche en utilisant la vélocité du Rigidbody2D
        rb2D.velocity = new Vector2(-vitesseDeDeplacement, rb2D.velocity.y);
    }
}

