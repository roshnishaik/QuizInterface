Public Class ques4
    Dim num, qno As Integer
    Dim ans, ques As Boolean
    Dim aa, bb, cc, dd, nq As Integer
    Dim cur As String
    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Dim stsp As Boolean
    Dim ti As Boolean
    Dim time As Integer
    Private Sub ques4_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        a.Image = My.Resources._1
        b.Image = My.Resources._2
        c.Image = My.Resources._3
        d.Image = My.Resources._4
        f.Image = My.Resources._6
        g.Image = My.Resources._7
        h.Image = My.Resources._8
        i.Image = My.Resources._9
        ee.Image = My.Resources._5

        num = 0
        qno = 1
        stsp = False
        ti = False
        ans = True
        aa = 0
        bb = 0
        cc = 0
        dd = 0
        nq = 1
        que.Text = "Which of these are owned by Google?"
        ques = True
        cur = "a"
        te.Text = "MC"
        ti = False
        time = 120
        timer.Text = time
    End Sub

    Private Sub ques4_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If nq < 5 Then
            Select Case e.KeyCode
                Case Keys.D1
                    If ques = True And ti = True Then
                        If a.BackColor = Color.White And num < 6 Then
                            num = num + 1
                            a.BackColor = Color.Yellow
                        ElseIf a.BackColor = Color.Yellow Then
                            a.BackColor = Color.White
                            num = num - 1
                        End If
                    End If


                Case Keys.D2
                    If ques = True And ti = True Then
                        If b.BackColor = Color.White And num < 6 Then
                            b.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf b.BackColor = Color.Yellow Then
                            b.BackColor = Color.White
                            num = num - 1
                        End If
                    End If
                Case Keys.D3
                    If ques = True And ti = True Then
                        If c.BackColor = Color.White And num < 6 Then
                            c.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf c.BackColor = Color.Yellow Then
                            c.BackColor = Color.White
                            num = num - 1
                        End If
                    End If
                Case Keys.D4
                    If ques = True And ti = True Then
                        If d.BackColor = Color.White And num < 6 Then
                            d.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf d.BackColor = Color.Yellow Then
                            num = num - 1
                            d.BackColor = Color.White
                        End If
                    End If
                Case Keys.D5
                    If ques = True And ti = True Then
                        If ee.BackColor = Color.White And num < 6 Then
                            ee.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf ee.BackColor = Color.Yellow Then
                            ee.BackColor = Color.White
                            num = num - 1
                        End If
                    End If
                Case Keys.D6
                    If ques = True And ti = True Then
                        If f.BackColor = Color.White And num < 6 Then
                            f.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf f.BackColor = Color.Yellow Then
                            num = num - 1
                            f.BackColor = Color.White
                        End If
                    End If
                Case Keys.D7
                    If ques = True And ti = True Then
                        If g.BackColor = Color.White And num < 6 Then
                            g.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf g.BackColor = Color.Yellow Then
                            g.BackColor = Color.White
                            num = num - 1
                        End If
                    End If
                Case Keys.D8
                    If ques = True And ti = True Then
                        If h.BackColor = Color.White And num < 6 Then
                            h.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf h.BackColor = Color.Yellow Then
                            num = num - 1
                            h.BackColor = Color.White
                        End If
                    End If
                Case Keys.D9
                    If ques = True And ti = True Then
                        If i.BackColor = Color.White And num < 6 Then
                            i.BackColor = Color.Yellow
                            num = num + 1
                        ElseIf i.BackColor = Color.Yellow Then
                            i.BackColor = Color.White
                            num = num - 1
                        End If
                    End If
                Case Keys.Q
                    If ques = False Then
                        qno = qno + 1
                        stsp = False
                        Select Case qno

                            Case 2
                                que.Text = "Which of these are file sharing sites?"
                                a.Image = My.Resources._21
                                b.Image = My.Resources._22
                                c.Image = My.Resources._23
                                d.Image = My.Resources._24
                                f.Image = My.Resources._26
                                g.Image = My.Resources._27
                                h.Image = My.Resources._28
                                i.Image = My.Resources._29
                                ee.Image = My.Resources._25
                            Case 3
                                que.Text = "Which of these are Samsung phone models?"
                                a.Image = My.Resources._31
                                b.Image = My.Resources._32
                                c.Image = My.Resources._33
                                d.Image = My.Resources._34
                                f.Image = My.Resources._36
                                g.Image = My.Resources._37
                                h.Image = My.Resources._38
                                i.Image = My.Resources._39
                                ee.Image = My.Resources._35
                            Case 4
                                que.Text = "Which of these games are owned by Electronic Arts"
                                a.Image = My.Resources._41
                                b.Image = My.Resources._42
                                c.Image = My.Resources._43
                                d.Image = My.Resources._44
                                f.Image = My.Resources._46
                                g.Image = My.Resources._47
                                h.Image = My.Resources._48
                                i.Image = My.Resources._49
                                ee.Image = My.Resources._445

                        End Select
                        a.BackColor = Color.White
                        b.BackColor = Color.White
                        c.BackColor = Color.White
                        d.BackColor = Color.White
                        ee.BackColor = Color.White
                        f.BackColor = Color.White
                        g.BackColor = Color.White
                        h.BackColor = Color.White
                        i.BackColor = Color.White

                        num = 0
                        ti = False
                        ans = True
                        time = 120
                        timer.Text = time
                        Select Case cur
                            Case "a"
                                cur = "b"
                                te.Text = "CSE-TITANS"
                            Case "b"
                                cur = "c"
                                te.Text = "TECH RESOLVERS"
                            Case "c"
                                cur = "d"
                                te.Text = "BURGEONS"
                        End Select
                    End If

                    ques = True
                    sc.Text = ""
                Case Keys.T
                    If stsp = False Then
                        If ques = True Then
                            tl4.Enabled = True

                            ti = True
                            stsp = True
                        End If

                    ElseIf stsp = True Then
                        tl4.Stop()
                        ti = False
                        stsp = False
                    End If
                Case Keys.A
                    If num = 6 And ques = True And ti = True Then
                        ques = False
                        Select Case qno

                            Case 1
                                a.BackColor = Color.Green
                                b.BackColor = Color.Green
                                c.BackColor = Color.Green
                                ee.BackColor = Color.Green
                                h.BackColor = Color.Green
                                g.BackColor = Color.Green
                                If d.BackColor = Color.Yellow Then
                                    d.BackColor = Color.Red
                                    ans = False
                                End If
                                If f.BackColor = Color.Yellow Then
                                    f.BackColor = Color.Red
                                    ans = False
                                End If
                                If i.BackColor = Color.Yellow Then
                                    i.BackColor = Color.Red
                                    ans = False
                                End If
                            Case 2
                                a.BackColor = Color.Green
                                d.BackColor = Color.Green
                                c.BackColor = Color.Green
                                f.BackColor = Color.Green
                                h.BackColor = Color.Green
                                g.BackColor = Color.Green
                                If ee.BackColor = Color.Yellow Then
                                    ee.BackColor = Color.Red
                                    ans = False
                                End If
                                If b.BackColor = Color.Yellow Then
                                    b.BackColor = Color.Red
                                    ans = False
                                End If
                                If i.BackColor = Color.Yellow Then
                                    i.BackColor = Color.Red
                                    ans = False
                                End If
                            Case 3
                                a.BackColor = Color.Green
                                b.BackColor = Color.Green
                                c.BackColor = Color.Green
                                ee.BackColor = Color.Green
                                h.BackColor = Color.Green
                                g.BackColor = Color.Green
                                If d.BackColor = Color.Yellow Then
                                    d.BackColor = Color.Red
                                    ans = False
                                End If
                                If f.BackColor = Color.Yellow Then
                                    f.BackColor = Color.Red
                                    ans = False
                                End If
                                If i.BackColor = Color.Yellow Then
                                    i.BackColor = Color.Red
                                    ans = False
                                End If
                            Case 4
                                d.BackColor = Color.Green
                                b.BackColor = Color.Green
                                c.BackColor = Color.Green
                                ee.BackColor = Color.Green
                                h.BackColor = Color.Green
                                f.BackColor = Color.Green
                                If a.BackColor = Color.Yellow Then
                                    a.BackColor = Color.Red
                                    ans = False
                                End If
                                If g.BackColor = Color.Yellow Then
                                    g.BackColor = Color.Red
                                    ans = False
                                End If
                                If i.BackColor = Color.Yellow Then
                                    i.BackColor = Color.Red
                                    ans = False
                                End If
                        End Select
                        ques = False
                        nq = nq + 1
                        tl4.Enabled = False
                        If ans = True Then
                            Select Case cur
                                Case "a"
                                    aa = 20
                                    sc.Text = aa
                                Case "b"
                                    bb = 20
                                    sc.Text = bb
                                Case "c"
                                    cc = 20
                                    sc.Text = cc
                                Case "d"
                                    dd = 20
                                    sc.Text = dd
                            End Select
                        End If
                    End If
            End Select
        Else
            If e.KeyCode = Keys.Enter Then
                con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                con.Open()
                sql = "update points4 set points='" & aa & "'where team='a'"
                cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                cmd.ExecuteNonQuery()
                sql = "update points4 set points='" & bb & "'where team='b'"
                cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                cmd.ExecuteNonQuery()
                sql = "update points4 set points='" & cc & "'where team='c'"
                cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                cmd.ExecuteNonQuery()
                sql = "update points4 set points='" & dd & "'where team='d'"
                cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                cmd.ExecuteNonQuery()
                con.Close()
                scor4.Show()
                Me.Hide()
            End If
        End If
    End Sub

    Private Sub tl4_Tick(sender As Object, e As EventArgs) Handles tl4.Tick
        If time > 0 Then
            time = time - 1
            My.Computer.Audio.Play(My.Resources.tk, AudioPlayMode.Background)
            timer.Text = time
        Else
            tl4.Enabled = False
            My.Computer.Audio.Play(My.Resources._end, AudioPlayMode.Background)
        End If
    End Sub


End Class