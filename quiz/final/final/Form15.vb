Public Class scor3

    Dim con As System.Data.OleDb.OleDbConnection
    Dim cmd As System.Data.OleDb.OleDbCommand
    Dim dr As System.Data.OleDb.OleDbDataReader
    Dim sql As String
    Dim p, q, r, s As Integer
    Private Sub scor2_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()

        sql = "select * from points3"

        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        dr = cmd.ExecuteReader()
        If dr.HasRows = True Then
            dr.Read()
            p = dr(1)
            dr.Read()
            q = dr(1)
            dr.Read()
            r = dr(1)
            dr.Read()
            s = dr(1)
        End If
        con.Close()
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()

        sql = "select * from POINTS"

        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        dr = cmd.ExecuteReader()
        If dr.HasRows = True Then
            dr.Read()
            p = p + dr(1)
            dr.Read()
            q = q + dr(1)
            dr.Read()
            r = r + dr(1)
            dr.Read()
            s = s + dr(1)
        End If
        con.Close()
        a.Text = p
        b.Text = q
        c.Text = r
        d.Text = s
        con = New System.Data.OleDb.OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=E:\quiz\final\final\quiz.accdb")
        con.Open()
        sql = "update POINTS set points='" & p & "'where team='a'"
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        cmd.ExecuteNonQuery()
        sql = "update POINTS set points='" & q & "'where team='b'"
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        cmd.ExecuteNonQuery()
        sql = "update POINTS set points='" & r & "'where team='c'"
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        cmd.ExecuteNonQuery()
        sql = "update POINTS set points='" & s & "'where team='d'"
        cmd = New System.Data.OleDb.OleDbCommand(sql, con)
        cmd.ExecuteNonQuery()
        con.Close()

    End Sub

    Private Sub scor3_KeyDown(sender As Object, e As KeyEventArgs) Handles MyBase.KeyDown
        If e.KeyCode = Keys.Enter Then
            AUD3.Show()
            Me.Hide()
        End If
    End Sub
End Class