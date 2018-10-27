Public Class r2

    Private Sub r2_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ins2.Show()
            Me.Hide()
        End If

    End Sub
End Class