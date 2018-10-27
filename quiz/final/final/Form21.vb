Public Class ins5

    Private Sub ins5_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ques5.show()
            Me.Hide()

        End If
    End Sub
End Class