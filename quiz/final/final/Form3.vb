Public Class r1

    Private Sub r1_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ins1.Show()
            Me.Hide()
        End If
    End Sub


End Class