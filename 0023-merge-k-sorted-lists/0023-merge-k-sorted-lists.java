/**
 * Definition for singly-linked list.
 * public class ListNode {
 *     int val;
 *     ListNode next;
 *     ListNode() {}
 *     ListNode(int val) { this.val = val; }
 *     ListNode(int val, ListNode next) { this.val = val; this.next = next; }
 * }
 */
import java.util.PriorityQueue;
class Solution {
    public ListNode mergeKLists(ListNode[] lists) {
      PriorityQueue<ListNode> pq= new PriorityQueue<>
      (
        (a,b) -> a.val-b.val
      );
      for (ListNode node : lists)
      {
        if(node != null)
        {
            pq.offer(node);
        }
      } 
      ListNode dummy = new ListNode(0);
      ListNode tail = dummy;

      while (!pq.isEmpty())
      {
        ListNode smallest = pq.poll();

        tail.next = smallest;
        tail = tail.next;

        if(smallest.next !=  null)
        {
            pq.offer(smallest.next);
        }
      }

      return dummy.next;
    }
}