Public Class ques5
    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Dim cur As String
    Dim qq As Integer
    Dim aa As Integer
    Dim que As Boolean
    Dim time As Integer
    Dim a, b, c, d As Integer
    Private Sub Form22_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        qq = 0
        tea5.Text = "MC"
        cur = "a"
        time = 90
        timer.Text = time
        aa = 0
        que = False
    End Sub

    Private Sub Form22_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        Select Case e.KeyCode
            Case Keys.Q
                If qq < 12 And qq <> 0 And time > 0 And que = False Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    qq = qq + 1
                    ans5.Text = ""
                    que = True
                    Select Case cur
                        Case "a"
                            sql = "select * from questions5a where num = " & qq & ""
                        Case "b"
                            sql = "select * from questions5b where num = " & qq & ""
                        Case "c"
                            sql = "select * from questions5c where num = " & qq & ""
                        Case "d"
                            sql = "select * from questions5d where num = " & qq & ""
                    End Select
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            que5.Text = dr(0)
                        End While
                    End If
                    con.Close()
                ElseIf time = 0 Then
                    qq = 12
                End If

            Case Keys.S
                If qq = 0 And que = False Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    que = True
                    qq = qq + 1
                    Select Case cur
                        Case "a"
                            sql = "select * from questions5a where num = " & qq & ""
                        Case "b"
                            sql = "select * from questions5b where num = " & qq & ""
                        Case "c"
                            sql = "select * from questions5c where num = " & qq & ""
                        Case "d"
                            sql = "select * from questions5d where num = " & qq & ""
                    End Select
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            que5.Text = dr(0)
                        End While
                    End If
                    con.Close()
                    tl5.Start()
                End If
            Case Keys.A
                If aa < qq And que = True Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    que = False
                    aa = aa + 1
                    Select Case cur
                        Case "a"
                            sql = "select * from questions5a where num = " & aa & ""
                        Case "b"
                            sql = "select * from questions5b where num = " & aa & ""
                        Case "c"
                            sql = "select * from questions5c where num = " & aa & ""
                        Case "d"
                            sql = "select * from questions5d where num = " & aa & ""
                    End Select
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            ans5.Text = dr(1)
                        End While
                    End If
                    con.Close()
                    Select Case cur
                        Case "a"
                            a = a + 10
                            scr.Text = a
                        Case "b"
                            b = b + 10
                            scr.Text = b
                        Case "c"
                            c = c + 10
                            scr.Text = c
                        Case "d"
                            d = d + 10
                            scr.Text = d
                    End Select
                    If aa = 12 Then
                        tl5.Stop()
                    End If
                End If
            Case Keys.W
                If aa < qq And que = True Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    que = False
                    aa = aa + 1
                    Select Case cur
                        Case "a"
                            sql = "select * from questions5a where num = " & aa & ""
                        Case "b"
                            sql = "select * from questions5b where num = " & aa & ""
                        Case "c"
                            sql = "select * from questions5c where num = " & aa & ""
                        Case "d"
                            sql = "select * from questions5d where num = " & aa & ""
                    End Select
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            ans5.Text = dr(1)
                        End While
                    End If
                    con.Close()
                    If aa = 12 Then
                        tl5.Stop()
                    End If
                End If
            Case Keys.N
                If qq = 12 And cur <> "d" Then
                    Select Case cur
                        Case "a"
                            cur = "b"
                            tea5.Text = "CSE-TITANS"
                        Case "b"
                            cur = "c"
                            tea5.Text = "TECH RESOLVERS"
                        Case "c"
                            cur = "d"
                            tea5.Text = "BURGEONS"
                    End Select
                    qq = 0
                    aa = 0
                    tl5.Stop()
                    que5.Text = ""
                    ans5.Text = ""

                    time = 90
                    timer.Text = time
                    scr.Text = ""
                End If

            Case Keys.Enter
                If cur = "d" And aa = 12 Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    sql = "update points5 set points='" & a & "'where team='a'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    sql = "update points5 set points='" & b & "'where team='b'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    sql = "update points5 set points='" & c & "'where team='c'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    sql = "update points5 set points='" & d & "'where team='d'"
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    con.Close()
                    scor5.Show()
                    Me.Hide()
                End If
        End Select
    End Sub

    Private Sub tl5_Tick(sender As Object, e As EventArgs) Handles tl5.Tick
        If time > 0 Then
            time = time - 1
            My.Computer.Audio.Play(My.Resources.tk, AudioPlayMode.Background)
            timer.Text = time
        Else
            tl5.Enabled = False
            My.Computer.Audio.Play(My.Resources._end, AudioPlayMode.Background)
        End If
    End Sub

    Private Sub que5_Click(sender As Object, e As EventArgs) Handles que5.Click

    End Sub
End Class
