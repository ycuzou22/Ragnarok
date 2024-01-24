using UnityEngine;

public class GestionVies : MonoBehaviour
{
    public GameObject FullLifeBar;
    public GameObject bar80;
    public GameObject bar50;
    public GameObject bar30;
    public GameObject bar10;

    private int nombreContacts = 0;
    private int nombreMaxContacts = 5;

    void Start()
    {
        SetActiveBarre(FullLifeBar, true);
    }
    void OnTriggerEnter2D(Collider2D other)
    {
        if (other.CompareTag("Obstacle"))
        {
            nombreContacts++;

            if (nombreContacts == 1) SetActiveBarre(fullLifeBar, false);
            else if (nombreContacts == 2) SetActiveBarre(bar80, false);
            else if (nombreContacts == 3) SetActiveBarre(bar50, false);
            else if (nombreContacts == 4) SetActiveBarre(bar30, false);
            else if (nombreContacts == 5) SetActiveBarre(bar10, false);

            if (nombreContacts >= nombreMaxContacts)
            {
                enabled = false;
            }
        }
    }
    void SetActiveBarre(GameObject barre, bool active)
    {
        if (barre != null)
        {
            barre.SetActive(active);
        }
    }
}
