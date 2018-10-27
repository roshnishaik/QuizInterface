Public Class domain1
    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Dim qq As Integer
    Dim aa As Integer
    Dim stsp, sel As Boolean
    Dim anss, canss As Boolean
    Dim cans As String
    Dim ti As Boolean
    Dim p As Integer
    Dim scr As Integer
    Dim time As Integer
    Dim timee As Object

    Private Sub domain1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Select Case ques3.dom
            Case 1
                qq = 1
                aa = 0
            Case 2
                qq = 4
                aa = 3
            Case 3
                qq = 7
                aa = 6
            Case 4
                qq = 10
                aa = 9
            Case 5
                qq = 13
                aa = 12
            Case 6
                qq = 16
                aa = 15

        End Select
        scr = 0
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()
        anss = False
        stsp = False

        sql = "select * from questions3 where num = " & qq & ""
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        dr = cmd.ExecuteReader()
        time = 30
        timeee.Text = time
        If dr.HasRows = True Then
            While dr.Read()
                que.Text = dr(0)
                opa.Text = dr(3)
                opb.Text = dr(4)
                opc.Text = dr(5)
                opd.Text = dr(6)
            End While
        End If
        p = 0
        con.Close()
        sel = False
        Select Case ques3.cur
            Case "a"
                team3.Text = "MC"
            Case "b"
                team3.Text = "CSE-TITANS"
            Case "c"
                team3.Text = "TECH RESOLVERS"
            Case "d"
                team3.Text = "BURGEONS"
        End Select
    End Sub
    Private Sub domain1_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown

        Select Case e.KeyCode
            Case Keys.Enter
                If aa = ((ques3.dom) * 3) Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    Select Case ques3.cur
                        Case "a"
                            sql = "update points3 set points='" & scr & "'where team='a'"
                        Case "b"
                            sql = "update points3 set points='" & scr & "'where team='b'"
                        Case "c"
                            sql = "update points3 set points='" & scr & "'where team='c'"
                        Case "d"
                            sql = "update points3 set points='" & scr & "'where team='d'"
                    End Select
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    cmd.ExecuteNonQuery()
                    Select Case ques3.dom
                        Case 1
                            ques3.a = False
                        Case 2
                            ques3.b = False
                        Case 3
                            ques3.c = False
                        Case 4
                            ques3.d = False
                        Case 5
                            ques3.ee = False
                        Case 6
                            ques3.f = False
                    End Select
                    ques3.dom = 0
                    ques3.Show()
                    Me.Close()
                End If
            Case Keys.Q
                If qq < ((ques3.dom) * 3) And anss = True Then
                    time = 30
                    timeee.Text = time
                    
                            opa.ForeColor = Color.White

                            opb.ForeColor = Color.White

                            opc.ForeColor = Color.White

                            opd.ForeColor = Color.White

                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    qq = qq + 1
                    anss = False
                    stsp = False
                    sql = "select * from questions3 where num = " & qq & ""
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            que.Text = dr(0)
                            opa.Text = dr(3)
                            opb.Text = dr(4)
                            opc.Text = dr(5)
                            opd.Text = dr(6)
                        End While
                    End If
                    con.Close()
                    sel = False
                End If

            Case Keys.A
                If aa < ((ques3.dom) * 3) And ti = True And anss = False And sel = True Then
                    aa = qq
                    anss = True
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    ti = False
                    sql = "select * from questions3 where num = " & aa & ""
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            cans = dr(1)
                        End While
                    End If
                    Select Case cans
                        Case "a"
                            opa.ForeColor = System.Drawing.Color.Lime
                            canss = True
                        Case "b"
                            opb.ForeColor = System.Drawing.Color.Lime
                            canss = True
                        Case "c"
                            opc.ForeColor = System.Drawing.Color.Lime
                            canss = True
                        Case "d"
                            opd.ForeColor = System.Drawing.Color.Lime
                            canss = True
                    End Select
                    If opa.ForeColor = Color.Yellow And cans <> "a" Then
                        opa.ForeColor = Color.Red
                        canss = False
                    End If
                    If opb.ForeColor = Color.Yellow And cans <> "b" Then
                        opb.ForeColor = Color.Red
                        canss = False
                    End If
                    If opc.ForeColor = Color.Yellow And cans <> "c" Then
                        opc.ForeColor = Color.Red
                        canss = False
                    End If
                    If opd.ForeColor = Color.Yellow And cans <> "d" Then
                        opd.ForeColor = Color.Red
                        canss = False
                    End If
                    tl3.Stop()
                    If canss = True Then

                        scr = scr + 10
                    Else
                        My.Computer.Audio.Play(My.Resources.wans, AudioPlayMode.Background)
                    End If
                    scr4.Text = scr
                End If
            Case Keys.T
                    If stsp = False Then
                        If anss = False Then
                            tl3.Enabled = True
                            stsp = True
                            ti = True
                        End If
                    ElseIf stsp = True Then
                        tl3.Stop()
                        stsp = False
                        ti = False
                    End If
            Case Keys.D1
                If opa.ForeColor = Color.White And sel = False And ti = True Then
                    opa.ForeColor = Color.Yellow
                    sel = True
                ElseIf opa.ForeColor = Color.Yellow And sel = True And ti = True Then
                    opa.ForeColor = Color.White
                    sel = False
                End If

            Case Keys.D2
                If opb.ForeColor = Color.White And sel = False And ti = True Then
                    opb.ForeColor = Color.Yellow
                    sel = True
                ElseIf opb.ForeColor = Color.Yellow And sel = True And ti = True Then
                    opb.ForeColor = Color.White
                    sel = False
                End If
            Case Keys.D3
                If opc.ForeColor = Color.White And sel = False And ti = True Then
                    opc.ForeColor = Color.Yellow
                    sel = True
                ElseIf opc.ForeColor = Color.Yellow And sel = True And ti = True Then
                    opc.ForeColor = Color.White
                    sel = False
                End If
            Case Keys.D4
                If opd.ForeColor = Color.White And sel = False And ti = True Then
                    opd.ForeColor = Color.Yellow
                    sel = True
                ElseIf opd.ForeColor = Color.Yellow And sel = True And ti = True Then
                    opd.ForeColor = Color.White
                    sel = False
                End If
        End Select
    End Sub

    Private Sub tl3_Tick(sender As Object, e As EventArgs) Handles tl3.Tick
        If time > 0 Then
            time = time - 1
            My.Computer.Audio.Play(My.Resources.tk, AudioPlayMode.Background)
            timeee.Text = time
        Else
            tl3.Enabled = False
            My.Computer.Audio.Play(My.Resources._end, AudioPlayMode.Background)
        End If
    End Sub

End Class