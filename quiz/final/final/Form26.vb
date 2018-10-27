Public Class AUD2

    Private Sub Form26_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ans.Text = "Cobalt - 60"
        ElseIf e.KeyCode = Keys.N Then
            r3.Show()
            Me.Hide()
        End If
    End Sub
End Class