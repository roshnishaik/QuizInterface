Public Class ques2
    Dim imag As Bitmap
    Dim qq As Integer
    Dim aa As Integer
    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Dim stsp As Boolean
    Dim ans As Boolean
    Dim ti As Boolean
    Dim pic As Boolean
    Dim cur As String
    Dim a, b, c, d As Integer
    Dim time As Integer
    Private Sub ques2_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        qq = 1
        a = 0
        b = 0
        c = 0
        d = 0
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()
        sql = "select * from questions2 where num = " & qq & ""
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        dr = cmd.ExecuteReader()
        If dr.HasRows = True Then
            While dr.Read()
                que2.Text = dr(0)
            End While
        End If
        con.Close()
        imag = My.Resources.q
        image.Image = imag
        ans = False
        stsp = False
        pic = False
        aa = 0
        cur = "A"
        te1.ForeColor = Color.DeepPink
        time = 60
        timer.Text = time
    End Sub

    Private Sub ques2_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown

        Select Case e.KeyCode

            Case Keys.T
                If stsp = False Then
                    If ans = False Then
                        tl2.Enabled = True
                        stsp = True
                        ti = True
                    End If
                ElseIf stsp = True Then
                    tl2.Stop()
                    stsp = False
                    ti = False
                End If
            Case Keys.W
                If aa < qq And ans = False And ti = True Then
                    con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                    con.Open()
                    aa = qq
                    sql = "select * from questions2 where num = " & aa & ""
                    cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                    dr = cmd.ExecuteReader()
                    If dr.HasRows = True Then
                        While dr.Read()
                            ans2.Text = dr(1)
                        End While
                    End If
                    ans = True
                    ti = False
                    tl2.Enabled = False
                    If pic = False Then
                        pic = True
                        Select Case qq

                            Case 2
                                imag = My.Resources.b
                                image.Image = imag
                            Case 6
                                imag = My.Resources.f
                                image.Image = imag
                            Case 10
                                imag = My.Resources.j
                                image.Image = imag
                            Case 3
                                imag = My.Resources.c
                                image.Image = imag
                            Case 7
                                imag = My.Resources.g
                                image.Image = imag
                            Case 11
                                imag = My.Resources.k
                                image.Image = imag
                            Case 4
                                imag = My.Resources.d
                                image.Image = imag
                            Case 8
                                imag = My.Resources.h
                                image.Image = imag
                            Case 12
                                imag = My.Resources.l
                                image.Image = imag
                            Case 1
                                imag = My.Resources.a
                                image.Image = imag
                            Case 5
                                imag = My.Resources.e
                                image.Image = imag
                            Case 9
                                imag = My.Resources.i
                                image.Image = imag
                        End Select
                        My.Computer.Audio.Play(My.Resources.wans, AudioPlayMode.Background)
                    End If
                End If
            Case Keys.Q
                    If ans = True And qq < 12 Then
                        ans2.Text = ""
                    time = 60
                    timer.Text = time
                        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                        con.Open()
                        qq = qq + 1
                        sql = "select * from questions2 where num = " & qq & ""
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        dr = cmd.ExecuteReader()
                        If dr.HasRows = True Then
                            While dr.Read()
                                que2.Text = dr(0)
                            End While
                        End If
                        ans = False
                        stsp = False
                    pic = False
                    con.Close()
                    imag = My.Resources.q
                    image.Image = imag
                    Select Case cur
                        Case "A"
                            te1.ForeColor = Color.Thistle
                        Case "B"
                            te2.ForeColor = Color.Thistle
                        Case "C"
                            te3.ForeColor = Color.Thistle
                        Case "D"
                            te4.ForeColor = Color.Thistle
                    End Select

                    Select Case qq Mod 4
                        Case 1
                            cur = "A"
                            te1.ForeColor = Color.DeepPink
                        Case 2
                            te2.ForeColor = Color.DeepPink
                            cur = "B"
                        Case 3
                            te3.ForeColor = Color.DeepPink
                            cur = "C"
                        Case 0
                            te4.ForeColor = Color.DeepPink
                            cur = "D"
                    End Select
                End If
            Case Keys.S
                    If aa > 11 Then

                        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                        con.Open()
                        sql = "update points2 set points='" & a & "'where team='a'"
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        cmd.ExecuteNonQuery()
                        sql = "update points2 set points='" & b & "'where team='b'"
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        cmd.ExecuteNonQuery()
                        sql = "update points2 set points='" & c & "'where team='c'"
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        cmd.ExecuteNonQuery()
                        sql = "update points2 set points='" & d & "'where team='d'"
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        cmd.ExecuteNonQuery()
                        con.Close()
                        scor2.Show()
                        Me.Hide()
                    End If
            Case Keys.A
                    If aa < qq Then
                    If ti = True And ans = False Then
                        ti = False
                        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
                        con.Open()
                        aa = qq
                        sql = "select * from questions2 where num = " & aa & ""
                        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
                        dr = cmd.ExecuteReader()
                        If dr.HasRows = True Then
                            While dr.Read()
                                ans2.Text = dr(1)
                            End While
                        End If
                        ans = True
                        tl2.Stop()
                        If time >= 45 Then
                            If pic = False Then
                                pic = True
                                Select Case qq

                                    Case 2
                                        imag = My.Resources.b
                                        image.Image = imag
                                    Case 6
                                        imag = My.Resources.f
                                        image.Image = imag
                                    Case 10
                                        imag = My.Resources.j
                                        image.Image = imag
                                    Case 3
                                        imag = My.Resources.c
                                        image.Image = imag
                                    Case 7
                                        imag = My.Resources.g
                                        image.Image = imag
                                    Case 11
                                        imag = My.Resources.k
                                        image.Image = imag
                                    Case 4
                                        imag = My.Resources.d
                                        image.Image = imag
                                    Case 8
                                        imag = My.Resources.h
                                        image.Image = imag
                                    Case 12
                                        imag = My.Resources.l
                                        image.Image = imag
                                    Case 1
                                        imag = My.Resources.a
                                        image.Image = imag
                                    Case 5
                                        imag = My.Resources.e
                                        image.Image = imag
                                    Case 9
                                        imag = My.Resources.i
                                        image.Image = imag
                                End Select
                            End If
                            Select Case cur
                                Case "A"
                                    a = a + 20
                                Case "B"
                                    b = b + 20
                                Case "C"
                                    c = c + 20
                                Case "D"
                                    d = d + 20
                            End Select
                        ElseIf time < 45 And time > 0 Then
                            Select Case cur
                                Case "A"
                                    a = a + 10
                                Case "B"
                                    b = b + 10
                                Case "C"
                                    c = c + 10
                                Case "D"
                                    d = d + 10
                            End Select
                        End If

                        sc1.Text = a
                        sc2.Text = b
                        sc3.Text = c
                        sc4.Text = d
                    End If
                    End If
        End Select

    End Sub

    Private Sub tl2_Tick(sender As Object, e As EventArgs) Handles tl2.Tick
        If time > 0 Then

            time = time - 1
            My.Computer.Audio.Play(My.Resources.tk, AudioPlayMode.Background)
            timer.Text = time
        Else
            My.Computer.Audio.Play(My.Resources._end, AudioPlayMode.Background)
            tl2.Enabled = False

        End If
        If pic = False And time = 45 Then
            pic = True
            Select Case qq

                Case 2
                    imag = My.Resources.b
                    image.Image = imag
                Case 6
                    imag = My.Resources.f
                    image.Image = imag
                Case 10
                    imag = My.Resources.j
                    image.Image = imag
                Case 3
                    imag = My.Resources.c
                    image.Image = imag
                Case 7
                    imag = My.Resources.g
                    image.Image = imag
                Case 11
                    imag = My.Resources.k
                    image.Image = imag
                Case 4
                    imag = My.Resources.d
                    image.Image = imag
                Case 8
                    imag = My.Resources.h
                    image.Image = imag
                Case 12
                    imag = My.Resources.l
                    image.Image = imag
                Case 1
                    imag = My.Resources.a
                    image.Image = imag
                Case 5
                    imag = My.Resources.e
                    image.Image = imag
                Case 9
                    imag = My.Resources.i
                    image.Image = imag
            End Select
        End If
    End Sub
End Class