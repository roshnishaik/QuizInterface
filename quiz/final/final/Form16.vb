Public Class r4

    
    Private Sub r4_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ins4.Show()
            Me.Hide()
        End If
    End Sub

   
End Class