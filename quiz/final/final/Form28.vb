Public Class AUD4

    Private Sub AUD4_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ans.Text = "Treta Yuga"
        ElseIf e.KeyCode = Keys.N Then
            r5.Show()
            Me.Hide()
        End If
    End Sub
End Class