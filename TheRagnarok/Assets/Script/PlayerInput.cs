using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.InputSystem;

public class PlayerInput : MonoBehaviour
{
    public float Speed = 25f;
    public float AccelerationMultiplier = 5f; // Facteur d'accélération
    public float JumpForce = 5f;
    [SerializeField] private Rigidbody2D RigidBody;
    private Vector2 MouvementInput;
    private bool isGrounded = true;
    private bool hasJumped = false;

    private void Update()
    {
        MovePlayer();
        CheckJumpInput();
    }

    private void MovePlayer()
    {
        Vector2 Mouvement = MouvementInput * Speed * Time.deltaTime;

        float currentSpeed = RigidBody.velocity.x;

        if (Keyboard.current.cKey.isPressed)
        {
            currentSpeed += Mouvement.x * AccelerationMultiplier * Time.deltaTime;
        }
        else
        {
            currentSpeed = Mouvement.x * Speed;
        }

        RigidBody.velocity = new Vector2(currentSpeed, RigidBody.velocity.y);

        transform.Translate(Mouvement);
    }

    private void CheckJumpInput()
    {
        if (isGrounded && Keyboard.current.spaceKey.wasPressedThisFrame && !hasJumped)
        {
            Jump();
        }
    }

    private void OnMove(InputValue value)
    {
        MouvementInput = value.Get<Vector2>();
    }

    private void OnCollisionEnter2D(Collision2D collision)
    {
        foreach (ContactPoint2D point in collision.contacts)
        {
            if (point.normal.y > 0.7f)
            {
                isGrounded = true;
                hasJumped = false;
            }
        }
    }

    private void Jump()
    {
        RigidBody.AddForce(new Vector2(0, JumpForce), ForceMode2D.Impulse);
        isGrounded = false;
        hasJumped = true;
    }
}
