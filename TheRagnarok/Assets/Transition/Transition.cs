using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class Transition : MonoBehaviour
{
    Animator animator;
    public float TransitionTime = 0.5f;
    [SerializeField] int NextScene;

    private void Awake()
    {
        animator = GetComponent<Animator>();
    }
    public void LoadNextScene()
    {
        NextScene = SceneManager.GetActiveScene().buildIndex + 1;
        StartCoroutine(LoadScene(NextScene));
    }
    IEnumerator LoadScene(int build_index)
    {
        animator.SetTrigger("Out");
        yield return new WaitForSeconds(TransitionTime);
        SceneManager.LoadScene(build_index);
    }
}
