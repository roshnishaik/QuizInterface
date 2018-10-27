Public Class ins2

    Private Sub ins2_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ques2.Show()
            Me.Hide()
        End If
    End Sub
End Class