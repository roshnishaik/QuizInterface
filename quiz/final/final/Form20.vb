Public Class r5

  
    Private Sub r5_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            ins5.Show()
            Me.Hide()
        End If
    End Sub
End Class