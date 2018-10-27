Public Class ques3
    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Public dom As Integer
    Public cur As String
    Dim te(4) As String
    Public a, b, c, d, ee, f As Boolean
    Dim loo, llo, var3, var, var4, vr, var2 As Integer
    Dim sc(2, 4) As Integer
    Private Sub ques3_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        Select Case e.KeyCode
            Case Keys.S
                If vr = 4 Then

                    scor3.Show()
                    Me.Hide()
                End If
            Case Keys.N
                If var = 1 And dom = 0 Then
                    If (loo < 4) Then
                        Select Case te(loo)
                            Case "a"
                                ttt.Text = "MC"
                            Case "b"
                                ttt.Text = "CSE-TITANS"
                            Case "c"
                                ttt.Text = "TECH RESOLVERS"
                            Case "d"
                                ttt.Text = "BURGEONS"
                        End Select

                        cur = te(loo)
                        loo = loo + 1
                    End If
                    var = 0
                End If
            Case Keys.D1
                If d1.ForeColor <> Color.Lime Then
                    If var = 0 And a = True Then
                        var = var + 1
                        dom = 1
                        vr = vr + 1
                        d1.ForeColor = Color.Lime
                    End If
                ElseIf d1.ForeColor = Color.Lime And var = 1 And a = True Then
                    var = var - 1
                    dom = 0
                    vr = vr - 1
                    d1.ForeColor = Color.White
                End If

            Case Keys.D2
                If d2.ForeColor <> Color.Lime And b = True Then
                    If var = 0 Then
                        var = var + 1
                        vr = vr + 1
                        d2.ForeColor = Color.Lime
                        dom = 2
                    End If
                ElseIf d2.ForeColor = Color.Lime And var = 1 And b = True Then
                    var = var - 1
                    dom = 0
                    vr = vr - 1
                    d2.ForeColor = Color.White
                End If
            Case Keys.D3
                If d3.ForeColor <> Color.Lime And c = True Then
                    If var = 0 Then
                        var = var + 1
                        vr = vr + 1
                        d3.ForeColor = Color.Lime
                        dom = 3
                    End If
                ElseIf d3.ForeColor = Color.Lime And var = 1 And c = True Then
                    var = var - 1
                    dom = 0
                    vr = vr - 1
                    d3.ForeColor = Color.White
                End If
            Case Keys.D4
                If d4.ForeColor <> Color.Lime And d = True Then
                    If var = 0 Then
                        var = var + 1
                        vr = vr + 1
                        d4.ForeColor = Color.Lime
                        dom = 4
                    End If
                ElseIf d4.ForeColor = Color.Lime And var = 1 And d = True Then
                    var = var - 1
                    dom = 0
                    vr = vr - 1
                    d4.ForeColor = Color.White
                End If
            Case Keys.D5
                If d5.ForeColor <> Color.Lime And ee = True Then
                    If var = 0 Then
                        var = var + 1
                        vr = vr + 1
                        d5.ForeColor = Color.Lime
                        dom = 5
                    End If
                ElseIf d5.ForeColor = Color.Lime And var = 1 And ee = True Then
                    var = var - 1
                    dom = 0
                    vr = vr - 1
                    d5.ForeColor = Color.White
                End If
            Case Keys.D6
                If d6.ForeColor <> Color.Lime And f = True Then
                    If var = 0 Then
                        var = var + 1
                        vr = vr + 1
                        d6.ForeColor = Color.Lime
                        dom = 6
                    End If
                ElseIf d6.ForeColor = Color.Lime And var = 1 And f = True Then
                    var = var - 1
                    dom = 0
                    vr = vr - 1
                    d6.ForeColor = Color.White
                End If
            Case Keys.Enter
                If dom <> 0 Then
                    domain1.Show()
                    Me.Hide()
                End If
        End Select
    End Sub

    Private Sub ques3_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        te(0) = "a"
        te(1) = "b"
        te(2) = "c"
        te(3) = "d"
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()

        sql = "select * from POINTS"

        cmd = New System.Data.OleDb.OleDbCommand(Sql, con)
        dr = cmd.ExecuteReader()
        If dr.HasRows = True Then
            dr.Read()
            sc(0, 0) = dr(1)
            dr.Read()
            sc(0, 1) = dr(1)
            dr.Read()
            sc(0, 2) = dr(1)
            dr.Read()
            sc(0, 3) = dr(1)
        End If
        con.Close()
        sc(1, 0) = 1
        sc(1, 1) = 2
        sc(1, 2) = 3
        sc(1, 3) = 4
        For Me.llo = 0 To 3
            var = sc(0, llo)
            var2 = sc(1, llo)
            vr = llo
            For Me.loo = llo + 1 To 3
                If sc(0, loo) < var Then
                    var = sc(0, loo)
                    vr = loo
                    var2 = sc(1, loo)
                End If
            Next loo
            For Me.var3 = vr To llo Step -1
                If var3 > 0 Then
                    sc(0, var3) = sc(0, (var3) - 1)
                    sc(1, var3) = sc(1, (var3) - 1)
                End If
            Next var3
            sc(0, var3 + 1) = var
            sc(1, var3 + 1) = var2
        Next llo
        For Me.loo = 0 To 3
            Select Case sc(1, loo)
                Case 1
                    te(loo) = "a"
                Case 2
                    te(loo) = "b"
                Case 3
                    te(loo) = "c"
                Case 4
                    te(loo) = "d"
            End Select
        Next loo
        Select Case te(0)
            Case "a"
                ttt.Text = "MC"
            Case "b"
                ttt.Text = "CSE-TITANS"
            Case "c"
                ttt.Text = "TECH RESOLVERS"
            Case "d"
                ttt.Text = "BURGEONS"
        End Select
        cur = te(0)
        loo = 1
        var = 0
        dom = 0
        vr = 0
        a = True
        b = True
        c = True
        d = True
        ee = True
        f = True
    End Sub

End Class