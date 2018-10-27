Public Class Form24

   
    Private Sub Form24_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown

        If e.KeyCode = Keys.Enter Then

            wel.Show()
            Me.Hide()
        End If
    End Sub

  
    Private Sub Form24_Load(sender As Object, e As EventArgs) Handles MyBase.Load

        My.Computer.Audio.Play(My.Resources.qq, AudioPlayMode.Background)
    End Sub
End Class