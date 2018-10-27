Public Class ins4


    Private Sub ins4_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ques4.show()
            Me.Hide()
        End If
    End Sub

End Class