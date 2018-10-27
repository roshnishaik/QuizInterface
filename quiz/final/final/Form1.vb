Public Class wel

    Private Sub Form1_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then

            team.Show()
            'My.Computer.Audio.Play(My.Resources.sl, AudioPlayMode.Background)
            Me.Hide()
        End If
    End Sub


End Class


