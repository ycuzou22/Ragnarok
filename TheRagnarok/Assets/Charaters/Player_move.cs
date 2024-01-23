using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Player_move : MonoBehaviour
{
    Rigidbody2D rb;
    [SerializeField] int force = 100;
    void Start()
    {
        rb = GetComponent<Rigidbody2D>();
    }

    void Update()
    {
        float x = Input.GetAxis("Horizontal") * Time.fixedDeltaTime;
        float y = Input.GetAxis("Vertical") * Time.fixedDeltaTime;
        if (x != 0) {
            rb.AddForce(Vector2.right * x * force);
        }

        if (y != 0) {
            rb.AddForce(Vector2.up * y * force);
        }
    }
}
