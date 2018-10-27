Public Class ins1
    Private Sub ins1_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ques1.Show()
            Me.Hide()
        End If
        If e.KeyCode = Keys.Back Then
            r1.Show()
            Me.Hide()
        End If
    End Sub


   
End Class