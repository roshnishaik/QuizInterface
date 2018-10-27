Public Class AUD1
    Private Sub AUD1_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ans.Text = "Robert Watson"
        ElseIf e.KeyCode = Keys.N Then
            r2.Show()
            Me.Hide()
        End If
    End Sub

  
    Private Sub ans_Click(sender As Object, e As EventArgs) Handles ans.Click

    End Sub

    Private Sub AUD1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub
End Class