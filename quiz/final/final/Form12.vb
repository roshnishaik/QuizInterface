Public Class ins3

    Private Sub Form12_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then

            ques3.Show()
            Me.Hide()
        End If

    End Sub

   
End Class