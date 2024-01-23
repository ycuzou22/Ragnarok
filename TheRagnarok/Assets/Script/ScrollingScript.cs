using System.Collections;
using System.Collections.Generic;
using UnityEngine;

/// Parallax scrolling
public class ScrollingScript : MonoBehaviour
{
    /// Vitesse du défilement
    public Vector2 speed = new Vector2(2, 2);

    /// Direction du défilement
    public Vector2 direction = new Vector2(-1, 0);

    /// Appliquer le mouvement de scrolling à la caméra ?
    public bool isLinkedToCamera = false;

    void Update()
    {
        // Mouvement
        Vector3 mouvement = new Vector3(
          speed.x * direction.x,
          speed.y * direction.y,
          0);

        mouvement *= Time.deltaTime;
        transform.Translate(mouvement);

        // Déplacement caméra
        if (isLinkedToCamera)
        {
            Camera.main.transform.Translate(mouvement);
        }
    }
}
