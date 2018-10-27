Public Class team

    Private Sub team_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            r1.Show()
            Me.Hide()
        End If
    End Sub

    Private Sub team_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        My.Computer.Audio.Stop()
    End Sub
End Class