using System.Collections;
using System.Collections.Generic;
using UnityEngine;

/// Parallax scrolling
public class ScrollingScript : MonoBehaviour
{
    /// Vitesse du d�filement
    public Vector2 speed = new Vector2(2, 2);

    /// Direction du d�filement
    public Vector2 direction = new Vector2(-1, 0);

    /// Appliquer le mouvement de scrolling � la cam�ra ?
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

        // D�placement cam�ra
        if (isLinkedToCamera)
        {
            Camera.main.transform.Translate(mouvement);
        }
    }
}
