Public Class AUD3

    Private Sub Form27_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ans.Text = "Brazil(2016) & Japan(2020)"
        ElseIf e.KeyCode = Keys.N Then
            r4.Show()
            Me.Hide()
        End If
    End Sub
End Class