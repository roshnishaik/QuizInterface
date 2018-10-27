Public Class r3

    Private Sub Form11_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ins3.Show()
            Me.Hide()

        End If
    End Sub
End Class